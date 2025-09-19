    $(function () {
      // Máscara
      $('#cep').mask('00000-000');

      // Validação
      $('#buscaCep').validate({
        rules: {
          cep: {
            required: true,
            minlength: 9
          }
        },
        messages: {
          cep: {
            required: "Informe o CEP",
            minlength: "Digite um CEP válido"
          }
        }
      });
    });