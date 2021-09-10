@extends('voyager::master')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
@section('css')

<style>
    .edit-add {
        margin-top: 60px
    }

    .dragItem {
        width: 49%;
        margin-bottom: 2%;
        border: 1px solid #c5ccce !important;
    }

    .dragItem>.card-body {}

    .myBtn {
        border: 0;
        color: #fff;
        cursor: pointer;
        border-radius: 10px;

    }

    .handle {
        background: #53595e;
        position: relative;
        top: 0px;
        left: 1px;
        font-weight: 600;
    }

    .cardLists {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 20px ;
    }

    .card.dragItem {
        padding: 20px;
    }



</style>
@endsection
@section('content')
<div class="page-content edit-add container-fluid" id="app">
    <div class="panel panel-bordered">
        <vue-draggable v-model="info" v-on:start="drag=true" v-on:end="drag=false" handle=".handle" v-bind="dragOptions">
            <transition-group class="cardLists" type="transition" :name="!drag ? 'flip-list' : null">
                <div class=" card dragItem" v-for="(item,index) in info" :key="index">
                    <button class="myBtn handle">::Drag</button>
                    <div class="row">
                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Question No. @{{index + 1}}</label>
                            <input required type="text" class="form-control" v-model="item.question">
                        </div>
                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Answer</label>
                            <vue-ckeditor :editor="editor" v-model="item.answer" :config="editorConfig">
                            </vue-ckeditor>
                        </div>

                        <div class="form-group  col-md-1">
                            <label class="control-label" for="name"></label>
                            <input class="btn btn-danger" type="button" v-on:click="deleteItem(item)" value="Delete">
                        </div>
                    </div>
                </div>
            </transition-group>
        </vue-draggable>
    </div>

    <div class="panel-footer">
        <input v-on:click="addItem" class="btn btn-success" type="button"
            value="Add">

        <button v-on:click="submitData" class="btn btn-primary" :disabled="disable">SAVE</button>

    </div>


</div>
@endsection

@section('javascript')
<script>
    @if(Session::has('success'))
     toastr.success("{{ session('success') }}");
    @endif
</script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.24.3/vuedraggable.umd.js"
integrity="sha512-MPl1xjL9tTTJHmaWWTewqTJcNxl2pecJ0D0dAFHmeQo8of+F9uF7zb2bazCX7m45K3mKRg44L1xJDeFzjmjRtA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="{{ asset('js/plugins/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ asset('js/plugins/@ckeditor/ckeditor5-vue2/dist/ckeditor.js') }}"></script>

<script>
    var pageTypeID = '{{request("id")}}';
    var app = new Vue({
        el: '#app',
        components: {
            'vue-draggable': vuedraggable,
            'vue-ckeditor': CKEditor.component
        },
        data: {
            toBeDeleted: [],
            info: [
                {
                    question:'',
                    answer:''
                }
            ],
            editor: ClassicEditor,
            editorData: '',
            editorConfig: {
                // The configuration of the editor.
            },
            drag: false,
            disable:false,
            pageType:'',
            pageTypeID:''

        },
        computed: {
            dragOptions() {
                return {
                    animation: 200,
                    group: "description",
                    disabled: false,
                    ghostClass: "ghost"
                };
            }
        },
        created() {
            this.pageType = "{{Request::segment(2)}}";
            this.info = @json($items);
            if(pageTypeID){
                this.pageTypeID=pageTypeID;
            }
        },
        methods: {
            addItem() {
                this.info.push({
                    question: '',
                    answer: ''
                })
            },
            deleteItem(item) {
                if (confirm(`Do you really want to Delete Question No. "${this.info.indexOf(item)+1}" ?`)) {
                    if (item.id) {
                        this.toBeDeleted.push(item.id);
                    }
                    this.info.splice(this.info.indexOf(item), 1)
                    toastr.success('Deleted! Save to finalize.')
                }

            },
            submitData() {
                let that  = this;
                this.disable=true;
                axios.post('{{ route('add') }}', {
                    info: this.info,
                    toBeDeleted: this.toBeDeleted,
                    type: this.pageType,
                    id : this.pageTypeID || null
                }).then((response) => {
                    that.disable = false;
                    that.info = response.data.faqs;
                    toastr.success('Successfully added data. Please add more!!');
                }).catch(function(error){
                        if (error.response) {
                            Object.values(error.response.data.errors).forEach((error)=>{
                                // toastr.error(error[0]);
                                toastr.error(error[0]);

                            })
                        }
                    })
            }
        }
    })
</script>


@endsection
