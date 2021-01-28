@if($item)
    @else
    <div class="form-group form {{$page}}"
         style="border: 1px solid #ccc; padding: 10px; display: flex; flex-direction: column">
        <button class="button">+</button>
        <div class="newForm" draggable="true">
            <div class="d-flex align-items-center">
                <input class="checkbox position-static" data-type="video" type="checkbox" name='files[1][is_video]' value="option1" aria-label="...">
                <p class="toggle">is_video</p>
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                <div class="imageUpload upload" data-type="image">
                    <label class="imageUploadInput" for="imageUploadInput">Image</label>
                    <input type="file" id="imageUploadInput" name="files[1][image]" accept="image/*" class="uploadFile img" value="Upload Photo">
                </div>
                <div class="videoUpload upload " data-type="video">
                    <label for="" class="videoUploadInput">YouTube video url</label>
                    <input disabled type="text" id="videoUploadInput" name="files[1][video]" class="uploadFile img" accept="video/*">
                </div>
                <div class="w-100 slider_url">
                    <label for="url"> Slider URL</label>
                    <input type="text" name="files[1][url]" style="padding: 5px" id="url" pattern="https://.*" size="30" required="" class="w-100 tox tox-tinymce" >
                </div>
                <div class="w-100 text_hy">
                    <label>ARM</label>
                    <textarea name="files[1][text_hy]" class="w-100 tox tox-tinymce form-control html-editor" cols="30" rows="1"></textarea>
                </div>
                <div class="w-100 text_ru">
                    <label>RU</label>
                    <textarea name="files[1][text_ru]" class="w-100 tox tox-tinymce form-control html-editor" cols="30" rows="1"></textarea>
                </div>
                <div class="w-100 text_en">
                    <label>EN</label>
                    <textarea name="files[1][text_en]" class="w-100 tox tox-tinymce form-control html-editor" cols="30" rows="1"></textarea>
                </div>

            </div>
        </div>
    </div>
@endif