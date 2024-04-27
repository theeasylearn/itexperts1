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

    // Open the file in write mode
    fp = fopen(filename, "wb"); // write into file in binary mode

    // Check if the file is opened successfully
    if (fp == NULL)
    {
        printf("Error opening the file.\n");
    }
    else
    {
        // Get employee details from the user
        printf("Enter employee name: ");
        scanf("%s",emp.name);
        printf("Enter employee ID: ");
        scanf("%d",&emp.employee_id);
        printf("Enter employee salary: ");
        scanf("%f",&emp.salary);

        // Write the structure variable into the file
        fwrite(&emp,sizeof(struct Employee),1,fp);

        // Close the file
        fclose(fp);

        printf("Data written to the file successfully.\n");
    }
}
