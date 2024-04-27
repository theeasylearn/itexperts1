/* write a program to count no of letter in given file name. also display file content */
#include<stdio.h>
void main()
{
    FILE *fp;
    char filename[50],character;
    int count=0;

    printf("Enter the filename to read: ");
    scanf("%s",filename);

    fp = fopen(filename,"r");

    if (fp == NULL) {
        printf("no such file exists. \n");
    }
    else 
    {
        do 
        {
            character = fgetc(fp); //read 1 character from file 
            if(character == EOF)
                break;
            else 
            {
                printf("%c",character);
                count++;
            }
        }while(1);
        fclose(fp);
        printf("\n no of letters in file = %d",count);
    }
}