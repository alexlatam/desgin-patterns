/* All data types of TypeScript */

// 1. Boolean
let isDone: boolean = false;

// 2. Number
let decimal: number = 6;
let hex: number = 0xf00d;
let binary: number = 10;
let octal: number = 484;

// 3. String
let color: string = "blue";
let fullName: string = `Bob Bobbington`;

// 4. Unknown
let notSureAboutThisVariable: unknown = 4;
notSureAboutThisVariable = "maybe a string instead";
notSureAboutThisVariable = false; // okay, definitely a boolean

// 5. Array
let list: number[] = [1, 2, 3];
let users: string[] = ['John', 'Jane', 'Joe'];
let list2: Array<number> = [1, 2, 3];
let names: Array<string> = ['John', 'Jane', 'Joe'];

// 6. Tuple
let x: [string, number];
x = ['hello', 10]; // OK
let y: [string, number] = ['hello', 10]; // OK
let animals: [string, number, boolean] = ['cat', 10, true]; // OK
let products: [ string[], boolean] = [['car', 'bike'], true]; // OK

// 7. Enum
enum ColorEnum {Red, Green, Blue}
let color_enum: ColorEnum = ColorEnum.Green;
console.log(color_enum); // 1
enum StatusEnum {Pending = 1, Approved = 2, Rejected = 3} // You can set the value of each item
let status_enum: StatusEnum = StatusEnum.Approved;
console.log(status_enum ); // 2
enum BrandEnum { Apple = 'Apple', Samsung = 'Samsung', Huawei = 'Huawei' }

// 8. Any
let notSure: any = 4;
notSure = "maybe a string instead";

// 9. Void
function warnUser(): void {
    console.log("This is my warning message");
}

// 10. Null and Undefined
let not_defined: undefined = undefined;
let without_value: null = null;

// 11. Never
function error(message: string): never {
    throw new Error(message);
}

// 12. Object
let user: object = {
    name: 'John',
    age: 30,
    is_admin: true,
}
declare function create(o: object | null): void;
create({ prop: 0 }); // OK
create(null); // OK
const smart_watch: {
    readonly id: number,
    name: string,
    brand: BrandEnum,
} = {
    id: 1,
    name: 'Apple Watch',
    brand: BrandEnum.Apple,
}

// 13. Custom types [Combination of Union and Type custom]
type BooleanLike = 0 | 1 | '0' | '1' | true | false;
let boolean_like: BooleanLike = 1;

// 14. Custom types [ Specific type ]
type Product = {
    readonly id: number,
    name: string,
    brand: BrandEnum,
}

const shoes: Product = {
    id: 1,
    name: 'Clean Shoes',
    brand: BrandEnum.Samsung,
}
const tv: Product = {
    id: 1,
    name: 'Television',
    brand: BrandEnum.Samsung,
}

const product_list: Product[] = [
    shoes,
    tv,
];

// 15. Union
let union_variable: string | number;
union_variable = 'Hello';
union_variable = 10;

// 16. Type Assertion
let someValue: unknown = "this is a string";
let strLength: number = (someValue as string).length; // Casting the someValue variable to string

let message: any = "Hello World";
let message_length: string = <string>message; // Casting the message variable to string

