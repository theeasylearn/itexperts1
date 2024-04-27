/* write a program copy one file into another file  */
#include <stdio.h>
void main()
{
    FILE *fp, *fp2;
    char filename1[50], character, filename2[50];
    printf("Enter the filename to read: ");
    scanf("%s", filename1);

    printf("Enter the filename to write: ");
    scanf("%s", filename2);

    fp = fopen(filename1, "r");
    fp2 = fopen(filename2, "w");
    
    if (fp == NULL)
    {
        printf("no such file exists. \n");
    }
    else
    {
        do
        {
            character = fgetc(fp); // read 1 character from file
            fputc(character,fp2);
            if (character == EOF)
                break;
        } while (1);
        fclose(fp);
        fclose(fp2);
        printf("\n File created successfully ");
    }
}