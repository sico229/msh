$(".LoginSubmitButton").click((e) => {
    e.preventDefault();
    $.post(
        "SaveLoginForm",
        {
            _token: $('input[name="_token"]').val(),
            identifiant: $('input[name="indentifiant"]').val(),
            password: $('input[name="password"]').val(),
        },
        (data) => {
            console.log(data);
        }
    );
});
