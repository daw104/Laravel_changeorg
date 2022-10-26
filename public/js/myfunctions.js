//Funcion para confirmar si queremos firmar una peticion con un href
//26/10/22 Sergio Castillo
$('#boton-firmar a').click(function(){
    // selecciona el href despues de ese id.
   var c= confirm("¿Estas seguro de que quieres firmar esta petición?");
   //retornamos c, ya que sea tru o false
   return c;
});
//****Fin de Funcion
