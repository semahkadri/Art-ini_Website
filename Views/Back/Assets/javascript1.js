function fonction()
{
    var nom_sponsor = f.nom_sponsor.value;
    var historique_sponsor = f.historique_sponsor.value;
    if(nom_sponsor.length ==0 || historique_sponsor.length ==0 )
    {
        alert("veuillez verifier votre données");
    } else
    if(nom_sponsor.length<4)
    {
        alert("votre nom doit contenir au minimum 4 caractéres");
    } 
    else if(historique_sponsor.length<10)
    {
        alert("votre historique doit contenir au minimum 8 caractéres");
    }
    
   
   
}