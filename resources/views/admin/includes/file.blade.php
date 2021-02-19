
<div class="form-group form {{$page}}"
     style="border: 1px solid #ccc; padding: 10px; display: flex; flex-direction: column">
    <button class="button add_file_blog"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
    @if(old('upload_files'))

        @foreach(old('upload_files') as $key=>$upload_file)

            <div class="newForm" draggable="true">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        @if($item && !empty($item->images) && isset($item->images[$key]) )
                            <input type="hidden" name="upload_files[{{$key}}][id]" value="{{$item->images[$key]->id}}">
                        @endif
                        <input class="checkbox position-static" @if(isset($upload_file["video"]) ) checked @endif data-type="video" type="checkbox"
                               value="option1" aria-label="...">
                        <p class="toggle">Is video</p>
                    </div>
                    @if($key != 0)
                        <span class="delete"><i class="fa fa-trash" aria-hidden="true"></i></span>
                    @endif

                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="imageUpload upload" data-type="image">
                        <label class="imageUploadInput" for="imageUploadInput">Image</label>
                        <input type="file" id="imageUploadInput" @if(isset($upload_file["video"]) ) disabled @endif name="upload_files[{{$key}}][image]" accept="image/*"
                               class="uploadFile img" value="Upload Photo">
                        @if ($errors->has('upload_files.'.$key.'.image'))



                            <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.image') }}</div>

                        @endif
                    </div>
                    <div class="videoUpload upload " data-type="video">
                        <label for="" class="videoUploadInput">YouTube video url</label>
                        <input  type="text" @if(isset($upload_file["video"])) value="{{$upload_file["video"]}}" @else disabled @endif id="videoUploadInput" name="upload_files[{{$key}}][video]"
                                class="uploadFile img" accept="video/*">
                        @if ($errors->has('upload_files.'.$key.'.video'))



                            <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.video') }}</div>

                        @endif
                    </div>
                    <div class="w-100 slider_url">
                        <label for="url"> Slider URL</label>
                        <input type="text" name="upload_files[{{$key}}][url]" style="padding: 5px" id="url" value="{{$upload_file["url"]}}"
                               class="w-100 tox tox-tinymce">
                        @if ($errors->has('upload_files.'.$key.'.url'))



                            <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.url') }}</div>

                        @endif
                    </div>
                    <div class="w-100 text_hy">
                        <label>ARM</label>
                        <textarea name="upload_files[{{$key}}][text_hy]" class="w-100 tox tox-tinymce form-control html-editor"
                                  cols="30" rows="1">{{$upload_file["text_hy"]}}</textarea>
                        @if ($errors->has('upload_files.'.$key.'.text_hy'))



                            <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.text_hy') }}</div>

                        @endif
                    </div>
                    <div class="w-100 text_ru">
                        <label>RU</label>
                        <textarea name="upload_files[{{$key}}][text_ru]" class="w-100 tox tox-tinymce form-control html-editor"
                                  cols="30" rows="1">{{$upload_file["text_ru"]}}</textarea>
                        @if ($errors->has('upload_files.'.$key.'.text_ru'))



                            <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.text_ru') }}</div>

                        @endif
                    </div>
                    <div class="w-100 text_en">
                        <label>EN</label>
                        <textarea name="upload_files[{{$key}}][text_en]" class="w-100 tox tox-tinymce form-control html-editor"
                                  cols="30" rows="1">{{$upload_file["text_en"]}}</textarea>
                        @if ($errors->has('upload_files.'.$key.'.text_en'))



                            <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.text_en') }}</div>

                        @endif
                    </div>

                </div>
            </div>
        @endforeach
    @else

@if($item)

    @php
        $upload_files =  $item->images->toArray();

    @endphp


        @if($upload_files)
            @foreach($upload_files as $key=>$upload_file)
                <div class="newForm" draggable="true">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="hidden" name="upload_files[{{$key}}][id]" value="{{$upload_file['id']}}">
                            <input class="checkbox position-static" @if($upload_file["video"] ) checked @endif data-type="video" type="checkbox"
                                    value="option1" aria-label="...">
                            <p class="toggle">Is video</p>
                        </div>
                        @if($key != 0)
                        <span class="delete"><i class="fa fa-trash" aria-hidden="true"></i></span>
                            @endif
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="imageUpload upload" data-type="image">
                            <label class="imageUploadInput" for="imageUploadInput">Image</label>
                             <input type="file" id="imageUploadInput" @if($upload_file["video"] ) disabled @endif name="upload_files[{{$key}}][image]" accept="image/*"
                                   class="uploadFile img" value="Upload Photo"> @if($upload_file["image_name"] ) <img width="100px" src="{{asset('files/'.$upload_file["image_name"])}}"> @endif
                            @if ($errors->has('upload_files.'.$key.'.image'))



                                <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.image') }}</div>

                            @endif
                        </div>
                        <div class="videoUpload upload " data-type="video">
                            <label for="" class="videoUploadInput">YouTube video url</label>
                            <input  type="text" @if(isset($upload_file["video"]) && $upload_file["video"] ) value="{{$upload_file["video"]}}" @else disabled @endif id="videoUploadInput" name="upload_files[{{$key}}][video]"
                                   class="uploadFile img" accept="video/*">
                            @if ($errors->has('upload_files.'.$key.'.video'))



                                <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.video') }}</div>

                            @endif
                        </div>
                        <div class="w-100 slider_url">
                            <label for="url"> Slider URL</label>
                            <input type="text" name="upload_files[{{$key}}][url]" style="padding: 5px" id="url" value="{{$upload_file["url"]}}"
                                   class="w-100 tox tox-tinymce">
                            @if ($errors->has('upload_files.'.$key.'.url'))



                                <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.url') }}</div>

                            @endif
                        </div>
                        <div class="w-100 text_hy">
                            <label>ARM</label>
                            <textarea name="upload_files[{{$key}}][text_hy]" class="w-100 tox tox-tinymce form-control html-editor"
                                      cols="30" rows="1">{{$upload_file["text_hy"]}}</textarea>
                            @if ($errors->has('upload_files.'.$key.'.text_hy'))



                                <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.text_hy') }}</div>

                            @endif
                        </div>
                        <div class="w-100 text_ru">
                            <label>RU</label>
                            <textarea name="upload_files[{{$key}}][text_ru]" class="w-100 tox tox-tinymce form-control html-editor"
                                      cols="30" rows="1">{{$upload_file["text_ru"]}}</textarea>
                            @if ($errors->has('upload_files.'.$key.'.text_ru'))



                                <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.text_ru') }}</div>

                            @endif
                        </div>
                        <div class="w-100 text_en">
                            <label>EN</label>
                            <textarea name="upload_files[{{$key}}][text_en]" class="w-100 tox tox-tinymce form-control html-editor"
                                      cols="30" rows="1">{{$upload_file["text_en"]}}</textarea>
                            @if ($errors->has('upload_files.'.$key.'.text_en'))



                                <div class="invalid-feedback">{{ $errors->first('upload_files.'.$key.'.text_en') }}</div>

                            @endif
                        </div>

                    </div>
                </div>
            @endforeach
        @endif



@else

        <div class="newForm" draggable="true">
            <div class="d-flex align-items-center">
                <input class="checkbox position-static" data-type="video" type="checkbox"
                        value="option1" aria-label="...">
                <p class="toggle">Is video</p>
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="imageUpload upload" data-type="image">
                    <label class="imageUploadInput" for="imageUploadInput">Image</label>
                    <input type="file" id="imageUploadInput" name="upload_files[0][image]" accept="image/*"
                           class="uploadFile img" value="Upload Photo">
                </div>
                <div class="videoUpload upload " data-type="video">
                    <label for="" class="videoUploadInput">YouTube video url</label>
                    <input disabled type="text" id="videoUploadInput" name="upload_files[0][video]"
                           class="uploadFile img" accept="video/*">
                </div>
                <div class="w-100 slider_url">
                    <label for="url"> Slider URL</label>
                    <input type="text" name="upload_files[0][url]" style="padding: 5px" id="url"
                           class="w-100 tox tox-tinymce">
                </div>
                <div class="w-100 text_hy">
                    <label>ARM</label>
                    <textarea name="upload_files[0][text_hy]" class="w-100 tox tox-tinymce form-control html-editor"
                              cols="30" rows="1"></textarea>
                </div>
                <div class="w-100 text_ru">
                    <label>RU</label>
                    <textarea name="upload_files[0][text_ru]" class="w-100 tox tox-tinymce form-control html-editor"
                              cols="30" rows="1"></textarea>
                </div>
                <div class="w-100 text_en">
                    <label>EN</label>
                    <textarea name="upload_files[0][text_en]" class="w-100 tox tox-tinymce form-control html-editor"
                              cols="30" rows="1"></textarea>
                </div>

            </div>
        </div>


    @endif
@endif
</div>
