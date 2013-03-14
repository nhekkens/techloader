$(document).ready(function() {
    var errorHandler = function(event, id, fileName, reason) {
        qq.log("id: " + id + ", fileName: " + fileName + ", reason: " + reason);
    };

    var fileNum = 0;

    $('#uploadWithVariousOptionsExample').fineUploader({
        multiple: false,
        request: {
            endpoint: "upload/"
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'txt'],
            sizeLimit: 500000000000000,
            minSizeLimit: 2000
        },
        text: {
            uploadButton: "Click Or Drop"
        },
        display: {
            fileSizeOnSubmit: true
        }
    }).on('error', errorHandler);

});
