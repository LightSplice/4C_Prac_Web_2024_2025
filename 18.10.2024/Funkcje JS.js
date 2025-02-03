function zadanie1()
{
    const liczby = [1, 2, 3, 4];
    const kwadraty = liczby.map(liczba => liczba * liczba);

    console.log(kwadraty);
}

function zadanie2()
{
    const liczby = [10, 20, 30, 40];
    const funkcja = function(a, b, c, d){
    return a + b + c + d;
    }

    console.log(funkcja(liczby[0], liczby[1], liczby[2], liczby[3]));
}