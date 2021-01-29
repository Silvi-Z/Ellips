@if($item)

    @php
        $upload_files =  $item->images->toArray();
       
    @endphp

    <div class="form-group form {{$page}}"
         style="border: 1px solid #ccc; padding: 10px; display: flex; flex-direction: column">
        <button class="button add_file_blog">+</button>
        @if($upload_files)
            @foreach($upload_files as $upload_file)
                <div class="newForm" draggable="true">
                    <div class="d-flex align-items-center">

                        <input class="checkbox position-static" @if($upload_file["video"] ) checked @endif data-type="video" type="checkbox"
                               name='upload_files[1][is_video]' value="option1" aria-label="...">
                        <p class="toggle">is_video</p>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="imageUpload upload" data-type="image">
                            <label class="imageUploadInput" for="imageUploadInput">Image</label>
                             <input type="file" id="imageUploadInput" @if($upload_file["video"] ) disabled @endif name="upload_files[1][image]" accept="image/*"
                                   class="uploadFile img" value="Upload Photo"> @if($upload_file["image_name"] ) <img width="100px" src="{{asset('files/'.$upload_file["image_name"])}}"> @endif
                        </div>
                        <div class="videoUpload upload " data-type="video">
                            <label for="" class="videoUploadInput">YouTube video url</label>
                            <input  type="text" @if($upload_file["video"] ) value="{{$upload_file["video"]}}" @else disabled @endif id="videoUploadInput" name="upload_files[1][video]"
                                   class="uploadFile img" accept="video/*">
                        </div>
                        <div class="w-100 slider_url">
                            <label for="url"> Slider URL</label>
                            <input type="text" name="upload_files[1][url]" style="padding: 5px" id="url"
                                   class="w-100 tox tox-tinymce">
                        </div>
                        <div class="w-100 text_hy">
                            <label>ARM</label>
                            <textarea name="upload_files[1][text_hy]" class="w-100 tox tox-tinymce form-control html-editor"
                                      cols="30" rows="1">{{$upload_file["text_hy"]}}</textarea>
                        </div>
                        <div class="w-100 text_ru">
                            <label>RU</label>
                            <textarea name="upload_files[1][text_ru]" class="w-100 tox tox-tinymce form-control html-editor"
                                      cols="30" rows="1">{{$upload_file["text_ru"]}}</textarea>
                        </div>
                        <div class="w-100 text_en">
                            <label>EN</label>
                            <textarea name="upload_files[1][text_en]" class="w-100 tox tox-tinymce form-control html-editor"
                                      cols="30" rows="1">{{$upload_file["text_en"]}}</textarea>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
    </div>


@else
    <div class="form-group form {{$page}}"
         style="border: 1px solid #ccc; padding: 10px; display: flex; flex-direction: column">
        <button class="button add_file_blog">+</button>
        <div class="newForm" draggable="true">
            <div class="d-flex align-items-center">
                <input class="checkbox position-static" data-type="video" type="checkbox"
                       name='upload_files[1][is_video]' value="option1" aria-label="...">
                <p class="toggle">is_video</p>
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="imageUpload upload" data-type="image">
                    <label class="imageUploadInput" for="imageUploadInput">Image</label>
                    <input type="file" id="imageUploadInput" name="upload_files[1][image]" accept="image/*"
                           class="uploadFile img" value="Upload Photo">
                </div>
                <div class="videoUpload upload " data-type="video">
                    <label for="" class="videoUploadInput">YouTube video url</label>
                    <input disabled type="text" id="videoUploadInput" name="upload_files[1][video]"
                           class="uploadFile img" accept="video/*">
                </div>
                <div class="w-100 slider_url">
                    <label for="url"> Slider URL</label>
                    <input type="text" name="upload_files[1][url]" style="padding: 5px" id="url"
                           class="w-100 tox tox-tinymce">
                </div>
                <div class="w-100 text_hy">
                    <label>ARM</label>
                    <textarea name="upload_files[1][text_hy]" class="w-100 tox tox-tinymce form-control html-editor"
                              cols="30" rows="1"></textarea>
                </div>
                <div class="w-100 text_ru">
                    <label>RU</label>
                    <textarea name="upload_files[1][text_ru]" class="w-100 tox tox-tinymce form-control html-editor"
                              cols="30" rows="1"></textarea>
                </div>
                <div class="w-100 text_en">
                    <label>EN</label>
                    <textarea name="upload_files[1][text_en]" class="w-100 tox tox-tinymce form-control html-editor"
                              cols="30" rows="1"></textarea>
                </div>

            </div>
        </div>
    </div>
@endif