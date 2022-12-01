function myPagination(nombre){
    var cote1 = document.getElementById("cote1");
    var page1 = document.getElementById("page1");
    var page2 = document.getElementById("page2");
    var page3 = document.getElementById("page3");
    var cote2 = document.getElementById("cote2");
    var cote3 = document.getElementById("cote3");
    var cote4 = document.getElementById("cote4");
    var section1 = document.getElementById("section1");
    var section2 = document.getElementById("section2");
    var section3 = document.getElementById("section3");
    var section4 = document.getElementById("section4");
    var section5 = document.getElementById("section5");
    var section6 = document.getElementById("section6");
    var section7 = document.getElementById("section7");
    var section8 = document.getElementById("section8");
    var section9 = document.getElementById("section9");
    var section10 = document.getElementById("section10");    

    if (nombre == 1) {
        page1.style.backgroundColor = "#5F5DFE";
        page1.style.color = "white";
        page2.style.background = "#605dfe00";
        page2.style.color = "black";
        page1.onmouseover = function() 
        {
            this.style.backgroundColor = "#5F5DFE";
        }
        page1.onmouseout = function() 
        {
            this.style.backgroundColor = "#5F5DFE";
        }
        page2.onmouseover = function() 
        {
            this.style.backgroundColor = "#ddd";
        }
        page2.onmouseout = function() 
        {
            this.style.backgroundColor = "#605dfe00";
        }
        page3.style.background = "#605dfe00";
        page3.style.color = "black";
        page3.onmouseover = function() 
        {
            this.style.backgroundColor = "#ddd";
        }
        page3.onmouseout = function() 
        {
            this.style.backgroundColor = "#605dfe00";
        }
        cote1.style.visibility = "hidden";
        cote1.style.display = "block";
        cote2.style.display = "none";
        cote2.style.visibility = "hidden";
        cote3.style.display = "block";
        cote3.style.visibility = "visible";
        cote4.style.display = "none";
        cote4.style.visibility = "hidden";
        section1.style.display = "block";
        section2.style.display = "block";
        section3.style.display = "block";
        section4.style.display = "block";
        section5.style.display = "none";
        section6.style.display = "none";
        section7.style.display = "none";
        section8.style.display = "none";
        section9.style.display = "none";
        section10.style.display = "none";
        section11.style.display = "none";
        section12.style.display = "none";
    }
    else if (nombre == 2) {
        page2.style.backgroundColor = "#5F5DFE";
        page2.style.color = "white";
        page1.style.background = "#605dfe00";
        page1.style.color = "black";
        page2.onmouseover = function() 
        {
            this.style.backgroundColor = "#5F5DFE";
        }
        page2.onmouseout = function() 
        {
            this.style.backgroundColor = "#5F5DFE";
        }
        page1.onmouseover = function() 
        {
            this.style.backgroundColor = "#ddd";
        }
        page1.onmouseout = function() 
        {
            this.style.backgroundColor = "#605dfe00";
        }
        page3.style.background = "#605dfe00";
        page3.style.color = "black";
        page3.onmouseover = function() 
        {
            this.style.backgroundColor = "#ddd";
        }
        page3.onmouseout = function() 
        {
            this.style.backgroundColor = "#605dfe00";
        }
        cote1.style.visibility = "visible";
        cote1.style.display = "block";
        cote2.style.display = "none";
        cote2.style.visibility = "hidden";
        cote3.style.display = "none";
        cote3.style.visibility = "hidden";
        cote4.style.visibility = "visible";
        cote4.style.display = "block";
        section1.style.display = "none";
        section2.style.display = "none";
        section3.style.display = "none";
        section4.style.display = "none";
        section5.style.display = "block";
        section6.style.display = "block";
        section7.style.display = "block";
        section8.style.display = "block";
        section9.style.display = "none";
        section10.style.display = "none";
        section11.style.display = "none";
        section12.style.display = "none";
    }
    else if(nombre == 3){
        page3.style.backgroundColor = "#5F5DFE";
        page3.style.color = "white";
        page2.style.background = "#605dfe00";
        page2.style.color = "black";
        page3.onmouseover = function() 
        {
            this.style.backgroundColor = "#5F5DFE";
        }
        page3.onmouseout = function() 
        {
            this.style.backgroundColor = "#5F5DFE";
        }
        page2.onmouseover = function() 
        {
            this.style.backgroundColor = "#ddd";
        }
        page2.onmouseout = function() 
        {
            this.style.backgroundColor = "#605dfe00";
        }
        page1.style.background = "#605dfe00";
        page1.style.color = "black";
        page1.onmouseover = function() 
        {
            this.style.backgroundColor = "#ddd";
        }
        page1.onmouseout = function() 
        {
            this.style.backgroundColor = "#605dfe00";
        }
        cote1.style.display = "none";
        cote1.style.visibility = "hidden";
        cote2.style.display = "block";
        cote2.style.visibility = "visible";
        cote3.style.display = "none";
        cote3.style.visibility = "hidden";
        cote4.style.visibility = "hidden";
        
        section1.style.display = "none";
        section2.style.display = "none";
        section3.style.display = "none";
        section4.style.display = "none";
        section5.style.display = "none";
        section6.style.display = "none";
        section7.style.display = "none";
        section8.style.display = "none";
        section9.style.display = "block";
        section10.style.display = "block";
        section11.style.display = "block";
        section12.style.display = "block";
    }

}
