#include <stdio.h>

int main() {
    int n;
    printf("Enter the number of elements: ");
    scanf("%d", &n);
    
    int arr[n];
    for (int i = 0; i < n; i++) {
        printf("Enter the number %d: ", i + 1);
        scanf("%d", &arr[i]);
    }


    int NumBerToShear = arr[0];
    for (int i = 0; i < n; i++) {
    	if(arr[i]>=0){
		
        if (NumBerToShear > arr[i]) {
            NumBerToShear = arr[i];
        }
    }
}
    printf("The smallest even number is: %d", NumBerToShear);

    
}
