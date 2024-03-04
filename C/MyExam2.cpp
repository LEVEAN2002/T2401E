#include <stdio.h>

float CrystalTienDien(float soKWh);

int main(){
    float soKWh;
    printf("Enter this month's electricity bill : ");
    scanf("%f", &soKWh);
    float bill = CrystalTienDien(soKWh);
   
}

float CrystalTienDien(float soKWh){
    int n = 0;
    if(soKWh < 50){
        n = 500;
    }
    else if(soKWh >= 51 && soKWh <= 100){
        n = 700;
    }
    else if(soKWh > 100){
        n = 900;
    }
    float Electricity_bill = soKWh * n;
    printf("The amount of electricity to pay is: %.0fvnd\n", Electricity_bill);
    return Electricity_bill;
}
