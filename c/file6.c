#include <stdio.h>
// Define a structure
struct Employee
{
    char name[50];
    int employee_id;
    float salary;
};

void main()
{
    FILE *fp;
    char filename[50];
    struct Employee emp;

    // Get the filename from the user
    printf("Enter the filename to write: ");
    scanf("%s", filename);

    // Open the file in read mode
    fp = fopen(filename, "rb"); 

    // Check if the file is opened successfully
    if (fp == NULL)
    {
        printf("Error opening the file.\n");
    }
    else
    {
        // read the structure variable into the file
        fread(&emp, sizeof(struct Employee), 1, fp);
        printf("Employee name: %s",emp.name);
        printf("Employee ID: %d",emp.employee_id);
        printf("Employee salary: %f",emp.salary);
        // Close the file
        fclose(fp);
    }
}
