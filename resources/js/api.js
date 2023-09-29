console.log("JavaScript is working!");

async function init() {
    const domElement = document.getElementById("bored");

    setInterval(async () => {
        const activityData = await getBoredApiData();
        const ul = document.createElement("ul");

        const li = document.createElement("li");
        li.innerHTML = `${activityData.activity}`;
        ul.append(li);

        // Clear previous activity data
        while (domElement.firstChild) {
            domElement.firstChild.remove();
        }

        domElement.append(ul);
    }, 3000);
}

/**
 * Async function to get the data from the Bored API
 * @returns - returns a promise
 */
async function getBoredApiData(url) {
    try {
        let response = await fetch("http://www.boredapi.com/api/activity/");
        let data = await response.json();
        return data;
    } catch (err) {
        console.error("Error: ", err);
    }
}

init();
