function moyenne(id){ 
    var concerne;
    var note, n = 0, somme = 0;
    for (var i=0; i<3; i++){
        if (i == 0)
            concerne = "rapport"
        else if (i == 1)
            concerne = "travail"
        else if (i == 2)
            concerne = "competences"
            
        note = parseFloat(document.getElementById("note_" + concerne + "_" + id).value);

        if(isNaN(note))
            note = 0;
        else {
            if (concerne == "rapport"){
                n += 1;
                somme += note;
            } else {
                n += 2;
                somme += note * 2;
            }
        }
    }
    
    document.getElementById("note_moyenne_"+id).value = parseFloat(somme/n).toFixed(2);
}

function pourcentage(){
    var pourcent = 0;
    table = document.getElementById("idTable");
    var tbodyRow = table.tBodies[0].rows.length;
    for (let i = 1; i < tbodyRow; i++) {
        pourcent = pourcent + parseFloat(document.getElementById("note_pourcentage_"+i).value);
    }

    document.getElementById("pourcent_nb").innerHTML = pourcent + " %";
    
    if (pourcent == 100) {
        document.getElementById('send').removeAttribute("disabled");
    } else {
        document.getElementById('send').setAttribute("disabled", null);
    }
}