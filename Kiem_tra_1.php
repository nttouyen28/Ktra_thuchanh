<?php
// PHẦN 1: TRẮC NGHIỆM
// Câu 1: Điền kết quả được in ra màn hình của đoạn mã sau
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
$uniqueNumbers = array_unique($numbers);
sort($uniqueNumbers);
print_r($uniqueNumbers);

//Kết quả in ra màn hình: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )

// Câu 2: Trong PHP, điều kiện sau đây sẽ trả về true hay false: 0 == '0'?
//a)True

// Câu 3: Cách nào sau đây được sử dụng để khai báo một mảng trong PHP?
//a) array()

// Câu 4: Hàm nào được sử dụng để đọc nội dung của một tệp trong PHP?
//a) readfile()

// Câu 5: Hàm serialize() trong PHP được sử dụng để làm gì?
//b) Chuyển đổi một đối tượng thành một chuỗi
echo "<hr>";
// PHẦN 2: THỰC HÀNH
//Bài 1: 
function generateFibonacci($n)
{
    $fibonacci = array();
    if($n>=1){
        $fibonacci[] = 0; //cần ít nhất một phần tử nên thêm 0 vào mảng
    }
    if($n>=2){
        $fibonacci[] = 1;// cần ít nhất 2 phần tử thì sẽ thêm số 1 vào mảng 
    }
    for ($i=2; $i<$n; $i++){
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; //các số tiếp theo bằng tổng của hai số liền trước
    }
    return $fibonacci;
}
$n = 8;
$fibonacciFirst = generateFibonacci($n);
echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
foreach ($fibonacciFirst as $value){
    echo $value . " ";
}

echo "<hr>";
//Bài 2:
// Nhập thông tin
$students = array(
    array('id' => 2, 'name' => 'Huy', 'age' => 20, 'grade' => "K57SD2"),
    array('id' => 3, 'name' => 'An', 'age' => 22, 'grade' => "K57SD1"),
    array('id' => 4, 'name' => 'Khang', 'age' => 22, 'grade' => "K57SD3"),
);
// Hiển thị thông tin học sinh
echo "Thông tin của tất cả học sinh:\n";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . "\n";
    echo "Tên: " . $student['name'] . "\n";
    echo "Tuổi: " . $student['age'] . "\n";
    echo "Điểm: " . $student['grade'] . "\n";
    echo "\n";
}
// Hàm tìm học sinh có điểm cao nhất
function studentHigtGrade($students)
{
    $Grade = 0;
    $Student = null; // gán giá trị null và 0 khởi tạo cho biến
    foreach ($students as $std) {
        if ($std['grade'] > $Grade) {
            $Grade = $std['grade'];
            $Student = $std;
        }
    }
    return $Student;
}
// Tìm học sinh có điểm cao nhất
$Student = studentHigtGrade($students);
echo "Học sinh có điểm cao nhất là:\n";
echo "ID: " . $Student['id'] . "\n";
echo "Tên: " . $Student['name'] . "\n";
echo "Tuổi: " . $Student['age'] . "\n";
echo "Điểm: " . $Student['grade'] . "\n";


?>
