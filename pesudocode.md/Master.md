1. create a relational diagram 
    https://dbdiagram.io/d/5fa99aeb3a78976d7b7b2c60
2. store a table of users 
    no longer need to do 
3. store a table of books to check out 

4. store a tble of books that have been checkouted 
    -and meta data: date and times of checkout -

5. full CRUD
    - Create{
        create books
    }
    - Read{
        read what books are checkout 
        and what books have been checkedout
    }
    - Update{
        update the meta data of each book
        ifthe meta data for it has been changed in any way 
    }
    - Delete{
        delete books
    }
6. impliment forgien keys
    I dont know how to do this

7. Show all user and book statistics that are saved in database (for example: There are 3 users registered with the library, user "jim" has 2 books checked out: "Algorithms", and "Design Patterns", user "phil" has 0 books checked out, and user "sally" has 1 book checked out: "The Pragmatic Programmer", there are 5 books in the library total, three are checked out, etc.) you can format this data however you'd like, we suggest a html table with multiple tabs
 - really have no clue if this is still relevante tr not 




 *NOTES*
 
 public function (){
        return $this ->hasMany('App\Models');
    }