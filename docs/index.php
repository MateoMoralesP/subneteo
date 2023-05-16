<!DOCTYPE html>
<html>
<head>
  <title>Subneteo de Red</title>
  <!-- <script>
    function calcularNumeroBitsSubred() {
      var ipRed = document.getElementById("ipRed").value;
      var numeroHosts = parseInt(document.getElementById("numeroHosts").value);

      // Convierte la dirección IP de red a formato binario
      var ipBinaria = '';
      var octetos = ipRed.split('.');
      for (var i = 0; i < octetos.length; i++) {
        ipBinaria += parseInt(octetos[i]).toString(2).padStart(8, '0');
      }
      
      var ipInicial = ipRed;
      var ipFinal = incrementarIP(ipInicial, numeroHosts - 2);
      var broadcast = incrementarIP(ipInicial, numeroHosts - 1);
  
      var bitsNecesarios = Math.ceil(Math.log2(numeroHosts + 2));
      var mascara = calcularMascara(32 - bitsNecesarios);
  
      // Mostrar los resultados en la página
      document.getElementById("ipRedResultado").textContent = ipRed;
      document.getElementById("numeroHostsResultado").textContent = numeroHosts;
      document.getElementById("bitsNecesariosResultado").textContent = bitsNecesarios;
      document.getElementById("ipInicialResultado").textContent = ipInicial;
      document.getElementById("ipFinalResultado").textContent = ipFinal;
      document.getElementById("broadcastResultado").textContent = broadcast;
      document.getElementById("mascaraResultado").textContent = mascara;
    }

    // Funciones de cálculo de IP y máscara como se mencionó anteriormente
    function incrementarIP(ip, incremento) {
      var octetos = ip.split('.').map(Number);
      for (var i = octetos.length - 1; i >= 0 && incremento > 0; i--) {
        var sum = octetos[i] + incremento;
        octetos[i] = sum % 256;
        incremento = Math.floor(sum / 256);
      }
      return octetos.join('.');
    }

    function calcularMascara(bits) {
      var mascaraBinaria = '';
      for (var i = 0; i < 32; i++) {
        if (i < 32 - bits) {
          mascaraBinaria += '1';
        } else {
          mascaraBinaria += '0';
        }
      }
      var mascaraDecimal = '';
      for (var j = 0; j < 4; j++) {
        mascaraDecimal += parseInt(mascaraBinaria.substr(j * 8, 8), 2);
        if (j < 3) {
          mascaraDecimal += '.';
        }
      }
      return mascaraDecimal;
    }
  </script> -->
</head>
<body>
  <!-- <h1>Subneteo de Red</h1>
  <form>
    <label for="ipRed">Dirección IP de Red:</label>
    <input type="text" id="ipRed" name="ipRed"><br><br>
    <label for="numeroHosts">Número de Hosts:</label>
    <input type="text" id="numeroHosts" name="numeroHosts"><br><br>
    <input type="button" value="Calcular" onclick="calcularNumeroBitsSubred()">
    <body> -->
  <h1>Subneteo de Red</h1>
  <form>
    <label for="ipRed">Dirección IP de Red:</label>
    <input type="text" id="ipRed" name="ipRed"><br><br>
    <label for="numeroHosts">Número de Hosts:</label>
    <input type="text" id="numeroHosts" name="numeroHosts"><br><br>
    <input type="button" value="Calcular" onclick="calcularNumeroBitsSubred()">
  </form>
  <br>
  <h2>Resultados:</h2>
  <p>IP de la red: <span id="ipRedResultado"></span></p>
  <p>Número de hosts para el subneteo de la red: <span id="numeroHostsResultado"></span></p>
  <p>Número de bits para el subneteo de la red: <span id="bitsNecesariosResultado"></span></p>
  <p>IP inicial para el subneteo de la red: <span id="ipInicialResultado"></span></p>
  <p>IP final para el subneteo de la red: <span id="ipFinalResultado"></span></p>
  <p>Broadcast para el subneteo de la red: <span id="broadcastResultado"></span></p>
  <p>Máscara para el subneteo de la red: <span id="mascaraResultado"></span></p>
  <script>
  function calcularNumeroBitsSubred() {
    var ipRed = document.getElementById("ipRed").value;
    var numeroHosts = parseInt(document.getElementById("numeroHosts").value);

    // Convierte la dirección IP de red a formato binario
    var ipBinaria = '';
    var octetos = ipRed.split('.');
    for (var i = 0; i < octetos.length; i++) {
      ipBinaria += parseInt(octetos[i]).toString(2).padStart(8, '0');
    }
    
    var ipInicial = incrementarIP(ipRed , 1);
    var bitsNecesarios = Math.ceil(Math.log2(numeroHosts + 1));
    var ipFinal = incrementarIP(ipRed, Math.pow(2, bitsNecesarios) - 2);
    var broadcast = incrementarIP(ipFinal, 1);

    var mascara = calcularMascara(32 - bitsNecesarios);

    // Mostrar los resultados en la página
    document.getElementById("ipRedResultado").textContent = ipRed;
    document.getElementById("numeroHostsResultado").textContent = numeroHosts;
    document.getElementById("bitsNecesariosResultado").textContent = bitsNecesarios;
    document.getElementById("ipInicialResultado").textContent = ipInicial;
    document.getElementById("ipFinalResultado").textContent = ipFinal;
    document.getElementById("broadcastResultado").textContent = broadcast;
    document.getElementById("mascaraResultado").textContent = mascara;
  }

  // Funciones de cálculo de IP y máscara como se mencionó anteriormente
  function incrementarIP(ip, incremento) {
    var octetos = ip.split('.').map(Number);
    for (var i = octetos.length - 1; i >= 0 && incremento > 0; i--) {
      var sum = octetos[i] + incremento;
      octetos[i] = sum % 256;
      incremento = Math.floor(sum / 256);
    }
    return octetos.join('.');
  }

  function calcularMascara(bits) {
    var mascaraBinaria = '';
    for (var i = 0; i < 32; i++) {
      if (i < bits) {
        mascaraBinaria += '1';
      } else {
        mascaraBinaria += '0';
      }
    }
    var mascaraDecimal = '';
    for (var j = 0; j < 4; j++) {
      mascaraDecimal += parseInt(mascaraBinaria.substr(j * 8, 8), 2);
      if (j < 3) {
        mascaraDecimal += '.';
      }
    }
    return mascaraDecimal;
  }
</script>

</body>
</html>
