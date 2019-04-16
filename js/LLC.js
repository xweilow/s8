var LLC = {
    
    loading: function(elem) {
        elem = $(elem);
        if(elem.is('form')){
            elem = elem.find('.llc_submit');
        }
        elem.prop('disabled', true);
        elem.append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
    },
    stopLoading: function(elem) {
        elem = $(elem);
        if(elem.is('form')){
            elem = elem.find('.llc_submit');
        }
        elem.prop('disabled', false);
        elem.find('span').remove();
    },
    callServer: function(url, data, callback, elem) {
        elem = $(elem);
        if(elem.is('form')){
            elem = elem.find('.llc_submit');
        }
        LLC.loading(elem);
        $.ajax({
            type: 'POST',
            url: baseURL + url,
            dataType: 'json',
            data: data,
            processData: false, 
            contentType: false,
            success: function(resp) {
                LLC.stopLoading(elem);
                callback(resp);
            },
            error: function() {
                LLC.stopLoading(elem);
                LLC.displayError("System Error");
            }
        });
    },
    displayError: function(msg) {
        $.notify({
            // options
            icon: 'mdi mdi-alert',
            title: 'Be Alert',
            message: msg
        }, {
            placement: {
                align: "right",
                from: "bottom"
            },
            showProgressbar: true,
            timer: 500,
            // settings
            z_index: 9999,
            type: 'danger',
            template: '<div data-notify="container" class=" bootstrap-notify alert bg-dark text-white" role="alert" style="width: 285px;">' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar bg-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<div class="media "> <div class="avatar m-r-10 avatar-sm"> <div class="avatar-title bg-{0} rounded-circle"><span data-notify="icon" class="mdi mdi-alert"></span></div> </div>' +
            '<div class="media-body"><div class="font-secondary" data-notify="title">{1}</div> ' +
            '<span class="opacity-75" data-notify="message">{2}</span></div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            ' <button type="button" aria-hidden="true" class="close" data-notify="dismiss"><span>x</span></button></div></div>'
        });
    },
    displaySuccess: function(msg) {
        $.notify({
            // options
            title: 'S8 - system',
            message: msg
        }, {
            placement: {
                align: "right",
                from: "bottom"
            },
            showProgressbar: true,
            timer: 500,
            // settings
            z_index: 9999,
            type: 'success',
            template: '<div data-notify="container" class=" bootstrap-notify alert bg-dark text-white" role="alert" style="width: 285px;">' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar bg-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<div class="media "> <div class="avatar m-r-10 avatar-sm"> <div class="avatar-title bg-{0} rounded-circle"><span data-notify="icon" class="mdi mdi-alert"></span></div> </div>' +
            '<div class="media-body"><div class="font-secondary" data-notify="title">{1}</div> ' +
            '<span class="opacity-75" data-notify="message">{2}</span></div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            ' <button type="button" aria-hidden="true" class="close" data-notify="dismiss"><span>x</span></button></div></div>'
        });
    },
    processResp: function(resp, func, func2) {
        if(resp.status == 1) {
            if(func != undefined) {
                func(resp);
            } else {
                location.reload();
            }
        } else if(resp.status == -1) {
            if(func2 != undefined) {
                func2(resp)
            } else {
                LLC.displayError(resp.data);
            }
        } else {
            LLC.displayError('System Error');
        }
    },
    checkFileExtension: function(fName) {
        var extensionLists = ['jpg', 'jpeg', 'png'];
        return extensionLists.indexOf(fName.split('.').pop()) > -1;
    },
    checkEmailFormat: function (email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
}