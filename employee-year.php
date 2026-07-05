Employees Joined This Year

SELECT * FROM employees
WHERE YEAR(join_date) = YEAR(CURDATE());
