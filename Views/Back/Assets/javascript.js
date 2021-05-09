function fonction()
{
    var nom_influenceur = f.nom_influenceur.value;
    var prenom_influenceur = f.prenom_influenceur.value;
    var historique_influenceur = f.historique_influenceur.value;
    if(nom_influenceur.length ==0 || prenom_influenceur.length ==0 || historique_influenceur.length ==0 )
    {
        alert("veuillez verifier votre données");
    } else
    if(nom_influenceur.length<4)
    {
        alert("votre nom doit contenir au minimum 4 caractéres");
    } 
    else if(prenom_influenceur.length<4)
    {
        alert("votre prenom doit contenir au minimum 4 caractéres");
    }
    else if(historique_influenceur.length<10)
    {
        alert("votre historique doit contenir au minimum 8 caractéres");
    }
    
   
   
}