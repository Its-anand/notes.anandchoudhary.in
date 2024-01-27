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