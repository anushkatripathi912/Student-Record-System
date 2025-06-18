Student Record System:- A web application using MySQL and PHP.


What the assignment does?

->Add new student records like Name,Age,Email
->Display all saved records in a table
->Delete a student by ID
->Validate form data on the client side using JavaScript
->Style the page with an external CSS file


What I learned

->How to connect PHP with a MySQL database using mysqli
->How to handle form data with POST and GET methods
->How to organize a project by separating HTML, CSS, JS, and PHP code
->How to push a local PHP project to GitHub using Git commands


Challenges I faced and how I solved them

->GitHub Push Errors: I initially had issues pushing to GitHub due to remote conflicts. I used git pull --allow-unrelated-histories to merge remote and local changes.
->Permission Errors in Git: Git showed a "dubious ownership" warning. I resolved it by marking the directory as safe using git config --global --add safe.directory.
->Form Validation: Ensuring accurate age and email input was tricky. I solved it by writing JavaScript validation before submission.
->PHP Errors: A parse error occurred due to incorrect variable usage inside SQL. I fixed it by properly using quotes in the SQL string.