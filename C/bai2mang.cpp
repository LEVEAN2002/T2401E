# include <stdio.h>
#include <stdlib.h>
int sosanh(const void *a, const void *b) {
    return (*(int*)b - *(int*)a);
}
int main (){
	int b,m,sm;
	printf("input so luong phan tu : ");
	scanf("%d",&b);
	int a[b];
	int tongchan =0 ;
	int tongle=0;
	int sum = 0;
	for(int i = 0 ; i<b;i++){
		printf("input %d :",i+1);
		scanf("%d",&a[i]);
		
	}
	for(int i =0 ;i<b;i++){
		printf("%d",a[i] );
	}
	printf("\n");
	qsort(a, b, sizeof(int),sosanh);
		for(int i =0 ;i<b;i++){
		printf("%d",a[i] );
	}
	for(int i =0 ;i<b;i++){
	if(a[i]%2==0){
		tongchan+=a[i];
	}
	if(a[i]%2!=0){
		tongle+=a[i];
	}
	sum+=a[i];
	}
	printf("\ntong cac so chan :%d \n tong cac so le :%d \ntong cac phan tu trong mang:%d \n",tongchan,tongle,sum);
	printf("nhap vao phan tu muon tim kiem trong mang :");
	scanf("%d",&m);
	for(int i = 0 ; i<b;i++){
		if(a[i]==m){
			sm++;
		}
	
		
	}
	printf("so lan %d xuat hien la :%d ",m,sm);
	
}
	

	

