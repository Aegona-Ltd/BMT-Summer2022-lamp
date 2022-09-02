$(document).ready(function() {
    $('#form1').submit(function(e){
const isCaptchaChecked = (grecaptcha && grecaptcha.getResponse().length !== 0);
if(isCaptchaChecked == false){
    alert('Hãy nhập capcha');
    e.preventDefault();
}
else{
    alert('Bạn đã nhập capcha thành công');
}
    });
});