<script>
        function validateForm() {
            // Get form field values
            const empId = document.forms["employeeForm"]["empid"].value;
            const empName = document.forms["employeeForm"]["empname"].value;
            const empAge = document.forms["employeeForm"]["empage"].value;
            const empNo = document.forms["employeeForm"]["empno"].value;

            // Validate Employee ID (must be a positive number)
            if (isNaN(empId) || empId <= 0) {
                alert("Please enter a valid Employee ID (positive number).");
                return false;
            }

            // Validate Employee Name (non-empty, alphabetical)
            const namePattern = /^[A-Za-z ]+$/;
            if (empName.trim() === "" || !namePattern.test(empName)) {
                alert("Please enter a valid Employee Name (alphabetical characters only).");
                return false;
            }

            // Validate Employee Age (number between 18 and 65)
            if (isNaN(empAge) || empAge < 18 || empAge > 65) {
                alert("Please enter a valid Employee Age (between 18 and 65).");
                return false;
            }

            // Validate Phone Number (10 digits)
            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(empNo)) {
                alert("Please enter a valid 10-digit Phone Number.");
                return false;
            }

            // If all validations pass, allow form submission
            return true;
        }
    </script>