function cambiarUnidades() {
    let tipoMedida = document.getElementById("tipo_medida").value;
    let unidadesOrigen = document.getElementById("unidad_origen");
    let unidadesDestino = document.getElementById("unidad_destino");
            
    unidadesOrigen.innerHTML = "";
    unidadesDestino.innerHTML = "";
            
        switch(tipoMedida){
            case "longitud":
                var opciones = ["Metros", "Centímetros", "Pulgadas", "Yarda", "Pie", "Kilómetro"];   
                break;
            case "masa": 
                var opciones = ["Kilogramos", "Libras", "Onzas", "Gramo", "Tonelada"]; 
                    break;
            case "volumen": 
                var opciones = ["Litro", "Mililitro", "Pie Cúbico", "Pulgada Cúbica", "Galón Imperial"]
                    break;
            case "datos": 
                var opciones = ["Gigabyte", "Megabyte", "Bits", "Kilobytes", "Bites"]
                    break;
            case "moneda": 
                var opciones = ["Dolar", "Euro", "Colón Salvadoreño", "Bitcoin", "GPB (Libra Esterlina)"]
                    break;
            case "tiempo": 
                var opciones = ["Segundo", "Minuto", "Hora", "Mes", "Año", "Década"]
                    break;
            default:
                var opciones = [];
            }
           
            for (var i = 0; i < opciones.length; i++) {
                var opcionOrigen = document.createElement("option");
                var opcionDestino = document.createElement("option");
                opcionOrigen.text = opciones[i];
                opcionDestino.text = opciones[i];
                
                unidadesOrigen.add(opcionOrigen);
                unidadesDestino.add(opcionDestino);
            }
        }