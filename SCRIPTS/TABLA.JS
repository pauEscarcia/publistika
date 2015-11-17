function addRowToTable()
{
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  // if there's no header row in the table, then iteration = lastRow + 1
  var iteration = lastRow;
  var row = tbl.insertRow(lastRow);
  
  // l
  var cellLeft = row.insertCell(0);
  var el1 = document.createElement('input');
  el1.type = 'text';
  el1.name = "cantidad[]" ;
  el1.id = 'cantidad' + iteration;
  el1.size = 20;
  cellLeft.appendChild(el1);

  
  // 2
  var cellRight = row.insertCell(1);
  var el = document.createElement('input');
  el.type = 'text';
  el.name = 'descripcion[]';
  el.id = 'descripcion' + iteration;
  el.size = 60;
  
  el.onkeypress = keyPressTest;
  cellRight.appendChild(el);
  
  // 3
  var cellRightSel = row.insertCell(2);
  var el3 = document.createElement('input');
  el3.type = 'text';
  el3.name = "pUni[]";
  el3.id = 'pUni' + iteration;
  el3.size = 20;
  cellRightSel.appendChild(el3);

  // 4
  var cell4 = row.insertCell(3);
  var el4 = document.createElement('input');
  el4.type = 'text';
  el4.name = "sub[]";
  el4.id = 'sub' + iteration;
  el4.size = 20;
  cell4.appendChild(el4);
}
function keyPressTest(e, obj)
{
  var validateChkb = document.getElementById('chkValidateOnKeyPress');
  if (validateChkb.checked) {
    var displayObj = document.getElementById('spanOutput');
    var key;
    if(window.event) {
      key = window.event.keyCode; 
    }
    else if(e.which) {
      key = e.which;
    }
    var objId;
    if (obj != null) {
      objId = obj.id;
    } else {
      objId = this.id;
    }
    displayObj.innerHTML = objId + ' : ' + String.fromCharCode(key);
  }
}
function removeRowFromTable()
{
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  if (lastRow > 2) tbl.deleteRow(lastRow - 1);
}
function openInNewWindow(frm)
{
  // open a blank window
  var aWindow = window.open('', 'TableAddRowNewWindow',
   'scrollbars=yes,menubar=yes,resizable=yes,toolbar=no,width=400,height=400');
   
  // set the target to the blank window
  frm.target = 'TableAddRowNewWindow';
  
  // submit
  frm.submit();
}
function validateRow(frm)
{
  var chkb = document.getElementById('chkValidate');
  if (chkb.checked) {
    var tbl = document.getElementById('tblSample');
    var lastRow = tbl.rows.length - 1;
    var i;
    for (i=1; i<=lastRow; i++) {
      var aRow = document.getElementById('txtRow' + i);
      if (aRow.value.length <= 0) {
        alert('Row ' + i + ' is empty');
        return;
      }
    }
  }
  openInNewWindow(frm);
}

function validar(){
  
    miformulario.submit();
  
}

function validar2(){
  
    miformulario2.submit();
  
}

function multiplicar(){
 for (var i=1;i<= 10;i++){ 
    
    var m1=document.getElementById("fila"+i+"1").value;
    var m2=document.getElementById("fila"+i+"3").value;
    //
    r = m1*m2;
      //deshabilitamos los campos 
      document.getElementById("fila"+i+"4").readOnly=true;
      //pasa el valor de multiplicar  
      document.getElementById("fila"+i+"4").value = r;

      
    //var m3+=document.getElementById("fila"+i+"4").value;
    //document.getElementById("Total").value = m3;
  }
  
}

function total(){
  var suma;
  var valor=0;
  for (var i=1;i<= 10;i++){ 
      suma= document.getElementById("fila"+i+"4").value;
      valor+=parseFloat(suma);
    }
  
  document.getElementById("Total").value = valor;
  //iva 16 porciento
  valor = document.getElementById("Total").value ;
  iva= 0.16*valor;
  document.getElementById("iva").value = iva;
  //Totalf= iva+Total
  Totalf= parseFloat(iva)+parseFloat(valor);
  document.getElementById("Totalf").value = Totalf;

 
  

}
