
 function display() {
            var napis = document.getElementById("kwota").value;
            document.getElementById("testy0").valueContent = napis;
            var napis1 = document.getElementById("ilosc miesiecy").value;
            document.getElementById("testy1").valueContent = napis1;
            var napis2 = document.getElementById("oprocentaowanie").value;
            document.getElementById("testy2").valueContent = napis2;
        }
            if(testy0> napis){
                document.write("a jest większe od 100")
            }
            else if(testy1< napis1){
                document.write("a jest mniejsze od 100")
            }
            else if(testy1< napis2){
            document.write("a jest mniejsze od 100")
            }