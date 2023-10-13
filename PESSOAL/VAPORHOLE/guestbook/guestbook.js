$(document).ready(function () {
    // Carregar mensagens existentes
    loadMessages();

    // Enviar mensagem
    $("#guestbook-form").submit(function (e) {
        e.preventDefault();

        var name = $("#name").val();
		var comment = $("#comment").val();

        var message = {
            name: name,
            comment: comment,
            date: new Date().toLocaleString()
        };

        // Enviar mensagem para o servidor
        $.ajax({
            type: "POST",
            url: "./guestbook/save_message.php",
            data: {
                message: JSON.stringify(message)
            },
            success: function (response) {
                if (response === "success") {
					alert("AQUIIII "+name+" por comentar!");
                    // Limpar campos após o envio bem-sucedido
                    $("#name").val("");
                    $("#comment").val("");
                    loadMessages();
                } else {
					alert("Obrigado "+name+" pela visita!.");
					window.location.reload();
                }
            }
        });
    });

    // Função para carregar mensagens existentes
    function loadMessages() {
        $.ajax({
            type: "GET",
			url: "./guestbook/messages.json",
            dataType: "json",
            success: function (data) {
                $("#guestbook-messages").empty();
                $.each(data, function (key, message) {
					$("#guestbook-messages").append("<table class=cyber-table><tr><td><strong>" + message.date + "</strong></td><td> " + message.name + "</td><td> " + message.comment + "</td></tr></table> ");
                });
            }
        });
    }
});

