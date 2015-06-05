# GoogleSearchOperators
Very simple abstraction and parser for create and use search based on Google Search Operators systems :
https://support.google.com/websearch/answer/2466433?hl=en

key:value+key:min..max-key:value

## Key Delimiter
| delimiter  | meaning |
| ------ | ----- |
| +      | AND  |
| -      | AND NOT |
| \|      | OR (not exists in Google Operators)  |



## Value Delimiter
| delimiter  | meaning |
| ------ | ----- |
| :      | IS =  |
| :<     | IS <  |
| :>     | IS >  |
| :>=    | IS >= |
| :>=    | IS <= |
| :val1..val2     | BETWEEN val1 AND val2 |
| :val1.val2.val3      | IN val1 AND val2 ANd val3 (not exists in Google Operators) |

WIP ...
