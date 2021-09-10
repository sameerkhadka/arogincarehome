<br>
@if(isset($dataTypeContent->{$row->field}))
    <?php $images = json_decode($dataTypeContent->{$row->field}); ?>
    @if($images != null)
        @foreach($images as $image)
            <div class="row" style="margin-left: 0 ">
                @php
                    $image_alt = "";
                    if(isset(json_decode($dataTypeContent->image_alts,true)[$loop->iteration-1])){
                    $image_alt = json_decode($dataTypeContent->image_alts,true)[$loop->iteration-1];
                    }
                @endphp
                <div class="col-3 img_settings_container" data-field-name="{{ $row->field }}" style="float:left;padding-right:15px;">
                    <a href="#" class="voyager-x remove-multi-image" style="position: absolute;"></a>
                    <img src="{{ Voyager::image( $image ) }}" data-file-name="{{ $image }}" data-id="{{ $dataTypeContent->id }}" style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">
                </div>
                @if($edit)
                    <div class="col-5">
                        <div class="form-group" style="display: flex; flex-direction:column">
                            <label class="control-label" style="font-weight: 900" for="alt{{ $loop->iteration }}">Alt</label>
                            <input class="form-control" name="image_alts[{{ $loop->iteration-1 }}]" id="alt{{ $loop->iteration }}" value="{{ $image_alt }}">
                        </div>
                        {{-- <div class="form-group" style="display: flex; flex-direction:column">
                           <label class="control-label" style="font-weight: 900" for="description{{ $loop->iteration }}">Caption</label>
                           <textarea class="form-control" name="caption[{{ $loop->iteration-1 }}]" id="description{{ $loop->iteration }}" cols="100" rows="4">asd</textarea>
                       </div> --}}
                    </div>
                @endif
            </div>

        @endforeach

    @endif
@endif
<div class="clearfix"></div>
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}[]" multiple="multiple" accept="image/*">
