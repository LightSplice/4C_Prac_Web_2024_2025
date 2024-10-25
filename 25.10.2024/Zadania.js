function divide(a, b)
{
    if (a != 0 && b != 0)
    {
        return a / b;
        console.log(wynik);
    }
    else
    {
        console.log("Nie dziel przez 0");
    }

}
console.log(divide(4, 2));

function parzysta(a)
{
    let wynik = a => a%2 == 0;

    console.log(wynik(10));
    console.log(wynik(5));
    console.log(wynik(4));
    console.log(wynik(2));
}
console.log(parzysta());

function globpriv()
{
    let globVar = "globalna";

    function checkScope()
    {
        let locVar = "lokalna";
        console.log(globVar);
        console.log(locVar);
    }

    checkScope();
    console.log(locVar);
}
console.log(globpriv());

function tablica()
{
    const table = [4,6,9];

    table.push(4);
    console.log(table);

    table.pop(1);
    console.log(table);
}
console.log(tablica());

function greet()
{
    function powitaj(imie, wiek = 18)
    {
        return `Cześć, ${imie}! Masz ${wiek} lat`;
    }

    console.log(powitaj("Dominik"));
    console.log(powitaj("Kacper", 30))
}
console.log(greet());