<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dpdgs36tdn14a host=ec2-54-221-206-165.compute-1.amazonaws.com port=5432 user=iklzsflimhwbbh password=K1DuYxivXcBvwAkA6TA6qjhnjX sslmode=require"
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>