
// Class base syntax
class Video {
    constructor(public title: string, private readonly _duration: number) {
        this.title = title;
        this._duration = _duration;
    }

    play(): void {
        console.log(`Playing ${this.title}`);
    }

    get duration(): string {
        return `The duration is: ${this._duration}`;
    }
}

// Inheritance without polymorphism
class VimeoVideo extends Video {
}

// Inheritance with polymorphism
class YoutubeVideo extends Video {
    constructor(public title: string, private _duration: number = 0) {
        super(title, _duration); // call the constructor from the parent class. This is mandatory!
        console.log('Youtube Video playing');
    }

    play(): void {
        super.play(); // call the play method from the parent class
        console.log(`Playing ${this.title} from Youtube`);
    }
}

const myVideo: YoutubeVideo = new YoutubeVideo('My video', 10);

myVideo.play();
console.log(myVideo.duration);

// Class with static methods
class Utils {
    static formatName(name: string): string {
        return name.toUpperCase();
    }
}

console.log(Utils.formatName('John Doe'));


// Interfaces and classes
interface IVideo {
    title: string;
    description?: string; // optional property
    play(): void;
}

class Video2 implements IVideo {
    constructor(public title: string) {
        this.title = title;
    }

    play(): void {
        console.log(`Playing ${this.title}`);
    }
}

const myVideo2: Video2 = new Video2('My video 2');
myVideo2.play();

// Abstract classes
abstract class AbstractVideo {
    protected constructor(public title: string) {
        this.title = title;
    }

    play(): void {
        console.log(`Playing ${this.title}`);
    }

    // Abstract methods must be implemented in the child classes
    abstract stop(): void;
}

class Video3 extends AbstractVideo {
    constructor(public title: string) {
        super(title);
    }

    stop(): void {
        console.log(`Stopping ${this.title}`);
    }
}