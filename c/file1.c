#include<stdio.h>
void main()
{
    FILE *fp;
    char filename[50],character;


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
                printf("%c",character);
        }while(1);
        fclose(fp);
    }
}