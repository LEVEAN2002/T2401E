#include <stdio.h>
#include<string.h>
#include <stdlib.h>
void inra(char b[]);
int main() {
	struct sv {
		char	name[50];
		int 	age;
	};
	int svlt,svtd,svh20,tksv;
	printf("so luong sinh vien can them vao :");

	int n,m;

	scanf("%d",&n);

	struct sv *a=(struct sv*)calloc(n,sizeof(struct sv));
	svlt =0;
	svtd=0;
	char sv_lt[50],sv_td[50];


	for(int i=0; i<n; i++) {
		printf("nhap ten sinh vien %d :",i+1);
		getchar();
		gets(a[i].name);
		printf("nhap tuoi cua %s :",a[i].name);

		scanf("%d",&a[i].age);

	}
		do{
		printf("\nchon cac so tu 1-4 de thuc hien chuong trinh \n");
		printf("1.tim sinh vien ten dai nhat\n");
		printf("2.tim sinh vien lon tuoi nhat\n");
		printf("3.tim sinh vien tuoi lon hon 20\n");
		printf("4.tim kiem sinh vien\n");
		scanf("%d",&m);
	}
	while(m<1||m>4);

	for(int i=0; i<n; i++) {
		if(svlt<a[i].age) {
			svlt=a[i].age;
			strcpy(sv_lt,a[i].name);
		}
		if(strlen(sv_td)<strlen(a[i].name)) {
			strcpy(sv_td,a[i].name);
		}	}
		
		void inra( char sv_td[]);
		if(m==1){
	
		printf("sinh vien ten dai nhat la %s \n",sv_td);	}
		if(m==2){
		
		printf("sinh vien tuoi lon nhat la %s\n",sv_lt);}
		if(m==3){
	
		printf("sinh vien co tuoi lon hon 20 la :");
	for(int i=0;i<n;i++){
		if(20<a[i].age){
		printf(" %s",a[i].name);
		}

	}	}
	if(m==4){

	printf("\nnhap ten sinh vien can tim ");
	char svct[50];
	scanf("%s",svct);
	for(int i=0;i<n;i++){
		int result = strcmp(a[i].name,svct);
		if(result==0){
			printf(" ten  cua sinh vien can tim :%s",a[i].name);
			printf("%d tuoi",a[i].age);
			break;
		}

}	}
}
void inra(char b[]){
	printf("%s", b);
}




