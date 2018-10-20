var editor = new wangEditor('content');

editor.config.uploadImgUrl = '/articles/image/upload'; //图片上传

// 设置 headers（举例）
editor.config.uploadHeaders = {
    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
};

editor.create();