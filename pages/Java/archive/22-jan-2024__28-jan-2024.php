<!--1.--><div class="topics" id="What_are_various_access_specifiers/_access_modifier_in_Java">
<!--Heading-->  <h2 class="subheading" >1. What are various access specifiers/ access modifier in Java.</h2>

<p>
  Access specifier or modifier are used to control the accessability of the class and it's properties and methods.
</p>
<p>In java there are four type of access specifier <b>public, private, projected and default</b>.</p>
<table border="1">
	<tbody>
		<tr>
			<td><strong>Modifier</strong></td>
			<td><strong>Description</strong></td>
		</tr>
		<tr>
			<td>Default</td>
			<td>If we do not explicitly specify any access modifier for classes, methods, variables, etc, then by default the default access modifier is considered. declarations are visible only within the package (package private)</td>
		</tr>
		<tr>
			<td>Private</td>
			<td>declarations are visible within the class only</td>
		</tr>
		<tr>
			<td>Protected</td>
			<td>declarations are visible within the package or all subclasses</td>
		</tr>
		<tr>
			<td>Public</td>
			<td>declarations are visible everywhere</td>
		</tr>
	</tbody>
</table>

</div>

<!--2.--><div class="topics" id="What_is_the_purpose_of_static_method_and_variable">
  <h2  class="subheading" >2. What is the purpose of static method and variable.</h2>
  <p>
  Whenever a variable is declared as static, this means there is only one copy of it for the entire class, rather than each object having its own copy. A static method means it can be called without creating an object of the class.
  </p>
</div>

<!--3.--><div class="topics" id="How_to_reverse_a_string_in_Java">
  <h2  class="subheading" >3. How to reverse a string in Java.</h2>
<pre class="code">
import java.util.Scanner;
public class TestRun{
    public static void main(String[] args){
        String name, rev = "";
        Scanner input = new Scanner(System.in);
        name = input.nextLine();
        for(int i = name.length()-1;i>=0;i--){
            rev += name.charAt(i);
        }
        System.out.println(rev);
    }
}
</pre>
</div>

<!--4--><div class="topics" id="Write_a_Java_program_to_check_if_two_strings_are_anagram">
<h2 class="subheading">4. Write a Java program to check if two strings are anagram</h2>
<pre class="code">
public class TestRun{
    public static void main(String[] args){
        String word1 = &quot;cat&quot;;
        String word2 = &quot;tac&quot;;
        boolean check = false;

        for(int i = 0;i&lt;word1.length();i++){
            char a = word1.charAt(i);
            check = false;

            for(int j = 0;j&lt;word2.length();j++){
                char b = word2.charAt(j);
                if(a==b){
                    check = true;
                    break;
                }
            }
            if(!check){
                break;
            }
        }
        if(check){
            System.out.println(&quot;Yes&quot;);
        }
        else{
            System.out.println(&quot;No&quot;);
        }
    }
}
</pre>
</div>
<!--5--><div class="topics" id="5">
<h2 class="subheading">5. How to check if one string is rotation of another string.</h2>
<pre class="code">
import java.util.Scanner;

public class TestRun{
    public static void main(String[] args){
        Scanner input = new Scanner(System.in);
        String word, word2;
        word = input.nextLine();
        word2 = input.nextLine();
        StringBuilder sb = new StringBuilder(word);
        sb.reverse();
        if(word2.equals(sb.toString())){
            System.out.println("yes");
        }
        else{
            System.out.println("no");
        }
    }
}
</pre>
</div>
<!--6--><div class="topics" id="6">
<h2 class="subheading">6. Difference btw java and javascript.</h2> 
<p>Javascript is web based client-side scripting language meanwhile java is a general purpose programming language.  Java is mainly used for back-end development, such as creating web applications, developing Android apps, and building enterprise software </p>
</div>

<!--7--><div class="topics" id="7">
<h2 class="subheading">7. what are packages and its advantages.</h2> 
<p>A java package is a group of similar types of classes, interfaces and sub-packages.</p>
<p>1. Java package is used to categorize the classes and interfaces so that they can be easily maintained.</p>
<p>2. Java package provides access protection.</p>
<p>3. Java package removes naming collision.</p>
</div>

<!--8--><div class="topics" id="8">
<h2 class="subheading">8. find maximum and minimum element in array.</h2> 
<pre class="code">
public class TestRun{
    public static void main(String[] args){
        int[] array = {1,3,2,5,6,34};
        int max = array[0];
        int min = array[0];

        for(int i =1;i&lt;array.length;i++){
            if(max&lt;array[i]){
                max = array[i];
            }
            if(min&gt;array[i]){
                min = array[i];
            }
        }
        System.out.println(max);
        System.out.println(min);
    }
}
</pre>
</div>

<!--9--><div class="topics" id="9">
<h2 class="subheading">9. find second largest no. in array.</h2> 
<pre class="code">
import java.util.Arrays;

public class SecondLargestExample {
    public static void main(String[] args) {
        int[] numbers = { 5, 2, 9, 1, 5, 6 };
        Arrays.sort(numbers);
        int secondLargest = numbers[numbers.length - 2];
        System.out.println("The second largest number is " + secondLargest);
    }
}
</pre>
</div>
<!--10--><div class="topics" id="10">
<h2 class="subheading">10. separate odd and even no. in array</h2> 
<pre class="code">
import java.util.Arrays;
public class TestRun {
    public static void main(String[] args) {
        int[] number = {1,2,3,4,5};
        int[] even = new int[number.length];
        int[] odd = new int[number.length];
        int j = 0, k = 0;

        for (int value : number) {
            if (value % 2 == 0) {
                even[j++] = value;
            } else {
                odd[k++] = value;
            }
        }
        //To remove the empty index
        even = Arrays.copyOf(even, j);
        odd = Arrays.copyOf(odd,k);
        for(int value : even){
            System.out.println(value);
        }
        for(int value : odd){
            System.out.println(value);
        }
    }
}
</pre>
</div>
<!--11--><div class="topics">
    <h2 class="subheading">11. Why is Java not a pure object oriented language?</h2>
    <p>Java is not pure object oriented programming language because it contains primitive data type like int, char, float, double, boolean, byte, short, long although java also support object oriented version of them.</p>
</div>

<!--12--><div class="topics">
<h2 class="subheading">12. What are the top Java Features.</h2>
<b>Object Oriented</b>
<p>In Java, almost everything is an Object.</p>
<b>Platform Independent</b>
<p>Java support "write once run anywhere" approach means that it can run on any platforms like windows, linux, unix, macOS etc</p>
<b>Multithreaded</b>
<p>With Java's multithreaded feature it is possible to write programs that can perform many tasks simultaneously.</p>
</div>

<!--13--><div class="topics">
<h2 class="subheading">13. How do you swap two numbers without using a third variable in Java?</h2>
<pre class="code">
import java.util.Scanner;

class swap{
    private static int num1, num2;
    public static void swapFunction(int a, int b){
        num1 = a;
        num2 = b;
        num1 = num1+ num2;
        num2 = num1 - num2;
        num1 = num1 - num2;

    }
    public static void display(){
        System.out.println("a = "+num1);
        System.out.println("b = "+num2);
    }
}
public class TestRun{
    public static void main(String[] args){
        int a,b;
        Scanner input = new Scanner(System.in);
        System.out.print("a = ");
        a = input.nextInt();
        System.out.print("b = ");
        b = input.nextInt();
        swap.swapFunction(a, b);
        swap.display();
    }
}
</pre>
</div>

<!--14--><div class="topics">
<h2 class="subheading">14. How to find duplicate elements in an array?</h2>
<pre class="code">
public static void findDuplicates(int[] arr) {
    System.out.print("Duplicate elements in the given array: ");
    for (int i = 0; i < arr.length; i++) {
        for (int j = i + 1; j < arr.length; j++) {
            if (arr[i] == arr[j]) {
                System.out.print(arr[j] + " ");
            }
        }
    }
}
</pre>
</div>

<!--15--><div class="topics">
<h2 class="subheading">15.How to check whether given number is binary or not?</h2>
<pre>
class BinaryFinder{
    public static boolean isBinaryNumber(int num) {
        if (num == 0 || num == 1 || num < 0) {
            return false;
        }
        while (num != 0) {
            if (num % 10 > 1) {
                return false;
            }
            num = num / 10;
        }
        return true;
    }
}
public class TestRun{
    public static void main(String[] args) {
        boolean check = BinaryFinder.isBinaryNumber(10140);
        if (check) {
            System.out.println("Number is binary");
        } else {
            System.out.println("Number is non binary");
        }
    }
}
</pre>
</div>

<!--16--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--17--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--18--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--19--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--20--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--21--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--22--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--23--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--24--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--25--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--16--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--27--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--28--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--29--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--30--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--31--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--32--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--33--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--34--><div class="topics">
<h2 class="subheading"></h2>
</div>

<!--35--><div class="topics">
<h2 class="subheading"></h2>
</div>


