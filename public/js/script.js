let key = 0;

function addUpload() {
    const divEL = document.createElement('div');
    divEL.classList = 'newForm';
    document.querySelector(".form").appendChild(divEL);
    ++key
    const uploads = `<input class="checkbox position-static" type="checkbox" name='upload_files[${key}][is_video]' aria-label="...">\n` +
        '                        <div class="d-flex flex-wrap justify-content-between">\n' +
        '                        <div class="imageUpload">\n' +
        '                            <label class="imageUploadInput" for="imageUploadInput">Image</label>\n' +
        `                       <input type="file"  name="upload_files[${key}][image]" accept="image/*" class="uploadFile img" value="Upload Photo">\n` +
        '                        </div>\n' +
        '                        <div class="videoUpload">\n' +
        '                            <label for="" class="videoUploadInput">YouTube video url</label>\n' +
        `                            <input type="text" disabled  name="upload_files[${key}][video]" class="uploadFile img" accept="video/*">\n` +
        '                        </div>\n' +
        '                        <div class="w-100 slider_url">\n' +
        '                            <label for="url">Slider URL</label>\n' +
        `                            <input class="w-100 tox tox-tinymce" style="padding: 5px" type="url" name="upload_files[${key}][url]" id="url" >\n` +
        '                        </div>\n' +
        '                        <div class="w-100 text_hy">\n' +
        '                            <label>ARM</label>\n' +
        `                            <textarea name="upload_files[${key}][text_hy]" class="w-100" cols="30" rows="1"></textarea>\n` +
        '                        </div>\n' +
        '                        <div class="w-100 text_ru">\n' +
        '                            <label>RU</label>\n' +
        `                            <textarea name="upload_files[${key}][text_ru]" class="w-100" cols="30" rows="1"></textarea>\n` +
        '                        </div>\n' +
        '                        <div class="w-100 text_en">\n' +
        '                            <label>EN</label>\n' +
        `                            <textarea name="upload_files[${key}][text_en]" class="w-100" cols="30" rows="1"></textarea>\n` +
        '                        </div>\n' +
        '\n' +
        '                    </div>'
    divEL.innerHTML = uploads;
    divEL.draggable = true;

    divEL.querySelectorAll('textarea').forEach(e=>{
        e.classList.add('html-editor')});
    tinymce.init({selector:'textarea'});
}

$(document).ready(function () {
    if($('.add_file_blog').length){
        document.querySelector('.add_file_blog').addEventListener('click', (e) => {
            e.preventDefault();
            addUpload()

        })
    }


    // function check() {
    //     const checkboxes = document.querySelectorAll(".checkbox");
    //     for (let i = 0; i < checkboxes.length; i++) {
    //         console.log(i);
    //         checkboxes[i].addEventListener('change', (e) => {
    //             const type = e.target.getAttribute('data-type')
    //             e.target.setAttribute('data-type', type === 'video' ? "image" : "video")
    //
    //             const uploadFile = e.target.parentNode.nextElementSibling.querySelectorAll('.upload')
    //             uploadFile.forEach(element => {
    //                 const input = element.querySelector('input')
    //                 input.disabled = element.getAttribute('data-type') !== type
    //             })
    //
    //         })
    //     }
    // }
    //
    // check()
    $(document).on('change','.checkbox', function () {
        var self = $(this);
        if(this.checked){
            self.closest('.newForm').find('.imageUpload input').attr("disabled", true)
            self.closest('.newForm').find('.videoUpload input').attr("disabled", false)
        }else{
            self.closest('.newForm').find('.imageUpload input').attr("disabled", false)
            self.closest('.newForm').find('.videoUpload input').attr("disabled", true)
        }
    })
});
