# include <stdio.h>
#include <math.h>
void ptbac1(int a,int b);
void ptbac2(int a,int b,int c);
int n,c,d,e,g;
int main(){
	do{

	printf("1.giai pt bac 1 \n");
	printf("2.giai pt bac 2 \n");
	scanf("%d",&n);	}
	while(n<1||n>2);
	if(n==1){

		printf("nhap vao cac gia tri cua a,b :ax + b = 0 \n");
		printf("input a:");
			scanf ("%d",&d);
			printf("input b:");
			scanf("%d",&e);
			ptbac1(d,e);
			
	}	
	if(n==2){

		printf("nhap vao cac gia tri cua a,b,c :ax^2 + bx + c = 0 \n");
		printf("input a:");
			scanf ("%d",&d);
			printf("input b:");
			scanf("%d",&e);
			printf("input c:");
			scanf("%d",&g);
			ptbac2(d,e,g);
		
		
	
}}
void ptbac1(int a,int b){
	if(a==0&&b==0){
		printf("pt vo so nghiem");
	}
	if(a==0&&b!=0){
		printf("pt vo ngiem");
	}
	else{
		int c = -b/a;
		printf("x = %f",(float)c);
	}
}
void ptbac2(int a,int b,int c){
	float dt=b^2 - 4*a*c;
	if(a==b==c==0){
		printf("pt vo so nghiem");
	}
	else if(a==b==0&&c!=0){
		printf("pt vo nghiem");
	}
	else{

	if(dt>0){
		printf("x1 =%.2f",(float)(-b + sqrt(d))/2*a);
		printf("x2 =%.2f",(float)(-b - sqrt(d))/2*a);
	}
	else if(dt<0){
		printf("pt vo nghiem");
	}
	else{
		printf("x1 = x2 %.2f",(float)-b/(2*a));
	}	}
}
