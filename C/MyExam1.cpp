#include <stdio.h>

int main() {
    int n;
    printf("Enter the number of elements: ");
    scanf("%d", &n);
    
    int arr1[n], arr2[n];
    for (int i = 0; i < n; i++) {
        printf("Enter the number %d: ", i + 1);
        scanf("%d", &arr1[i]);
    }

    int j = 0;
    for (int i = 0; i < n; i++) {
        if (arr1[i] % 2 == 0) {
            arr2[j] = arr1[i];
            j++;
        }
    }

    int NumBerToShear = arr2[0];
    for (int i = 0; i < j; i++) {
        if (NumBerToShear > arr2[i]) {
            NumBerToShear = arr2[i];
        }
    }

    printf("The smallest even number is: %d", NumBerToShear);

    
}
