<?php





// Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.

function numberSqrt($number)
{
    $sqrt = pow($number, 2);
    return  $sqrt;
};


// Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.


function twoNumberSum($num1, $num2)
{
    $numberSum = $num1 + $num2;
    return $numberSum;
};


// Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.


function minusDivisionMath($num1, $num2, $num3)
{
    $minusTwoNumber = $num2 - $num1;
    $divide = $minusTwoNumber / $num3;
    return $divide;
};

// Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.

function weekDayInLt($numberOfTheDay)
{
    if (is_numeric($numberOfTheDay)) {
        switch ($numberOfTheDay) {
            case 1:
                return "Pirmadienis";
                break;
            case 2:
                return "Antradienis";
                break;
            case 3:
                return "Treciadienis";
                break;
            case 4:
                return "Ketvirtadienis";
                break;
            case 5:
                echo "Penktadienis";
                break;
            case 6:
                return "Šeštadienis";
                break;
            case 7:
                return "Sekmadienis";
                break;
            default:
                return "There is no week day by this number";
        };
    } else {
        return 'value is not a number';
    };
};

echo (numberSqrt(10));
echo "<br>";
echo(twoNumberSum(4,5));
echo "<br>";
echo (minusDivisionMath(2,10,2));
echo "<br>";
echo (weekDayInLt(3));
