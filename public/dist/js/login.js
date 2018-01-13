'use strict';

$(document).ready(function () {
  $('.ui.form').form({
    fields: {
      phone: {
        identifier: 'phone',
        rules: [{
          type: 'empty',
          prompt: '请输入你的手机号'
        }, {
          type: 'regExp[/^1(\\d{10})$/]',
          prompt: '请输入正确的手机号！'
        }]
      },
      password: {
        identifier: 'password',
        rules: [{
          type: 'empty',
          prompt: '请输入你的密码'
        }, {
          type: 'length[6]',
          prompt: '密码至少 6 位'
        }]
      }
    }
  });
});