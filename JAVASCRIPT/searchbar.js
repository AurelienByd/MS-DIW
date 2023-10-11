var btnsearch = document.getElementById("boutton");

btnsearch.addEventListener("click", function searchbar() {
    var search = document.getElementById("barre_search").value;

// pour les catégories :

    if(search.toLowerCase() === "pizza") {
        location.replace("/categorie.php?id=4");
    }

    if(search.toLowerCase() === "burger") {
        location.replace("/categorie.php?id=5");
    }

    // if(search.toLowerCase() === "wraps") {
    //     location.replace("/categorie.php?id=9");
    // }

    if(search.toLowerCase() === "pasta") {
        location.replace("/categorie.php?id=10");
    }

    if(search.toLowerCase() === "sandwich") {
        location.replace("/categorie.php?id=11");
    }

    // if(search.toLowerCase() === "salade") {
    //     location.replace("/categorie.php?id=13");
    // }

    if(search.toLowerCase() === "veggie") {
        location.replace("/categorie.php?id=14");
    }

    if(search.toLowerCase() === "tarte") {
        location.replace("/categorie.php?id=15");
    }

// pour les catégories :

// pour les plats :

    if(search.toLowerCase() === "district burger") {
        location.replace("/plat.php?id=4");
    }

    if(search.toLowerCase() === "pizza bianca") {
        location.replace("/plat.php?id=5");
    }

    // if(search.toLowerCase() === "buffalo chicken wrap") {
    //     location.replace("/plat.php?id=9");
    // }

    if(search.toLowerCase() === "cheeseburger") {
        location.replace("/plat.php?id=10");
    }

    if(search.toLowerCase() === "spaghetti aux légumes") {
        location.replace("/plat.php?id=12");
    }

    // if(search.toLowerCase() === "salade cesar") {
    //     location.replace("/plat.php?id=13");
    // }

    if(search.toLowerCase() === "pizza margherita") {
        location.replace("/plat.php?id=14");
    }

    if(search.toLowerCase() === "courgettes farcies") {
        location.replace("/plat.php?id=15");
    }

    if(search.toLowerCase() === "lasagnes") {
        location.replace("/plat.php?id=16");
    }

    if(search.toLowerCase() === "tagliatelles au saumon") {
        location.replace("/plat.php?id=17");
    }

    if(search.toLowerCase() === "tarte aux pommes") {
        location.replace("/plat.php?id=18");
    }

    if(search.toLowerCase() === "pizza aux épinards et à l'ail") {
        location.replace("/plat.php?id=19");
    }

    // if(search.toLowerCase() === "salade mixte") {
    //     location.replace("/plat.php?id=20");
    // }

    if(search.toLowerCase() === "grilled cheese") {
        location.replace("/plat.php?id=21");
    }

    if(search.toLowerCase() === "quinoa aux potimarrons") {
        location.replace("/plat.php?id=22");
    }

// pour les plats :

})