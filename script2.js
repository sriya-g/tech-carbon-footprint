var personButton = document.getElementById("consumer-button");
var businessButton = document.getElementById("business-button");
var consFactSpace = document.getElementById("consfactspace");
var busiFactSpace = document.getElementById("busifactspace");
var businessFacts = ["Don’t change your electronics for the newest version as often! 852 million metric tonnes of co2 will be emitted from e waste sources by 2023.", "Store data locally! Using the cloud as little as possible lessens your carbon impact.", "Check your website for redundant content and use a clear font to reduce user time.", "Block bots to lower unnecessary traffic to your website.", "Decrease the amount of video-streaming meetings that occur"];
var persFacts = ["Don’t change your electronics for the newest version as often! 852 million metric tonnes of co2 will be emitted from e waste sources by 2023.", "Empty your email inbox as often as you can. One email can cost up to 26 grams of co2!", "Stop streaming videos, it contributes to 75% of global data traffic!", "Use eco-friendly websites like Ecosia, Fairtrade, and Pearce! They not only provide you answers, but save the environment as well", "Next time you listen to your favorite song, use audio files instead of videos.", "Store data locally! Using the cloud as little as possible lessens your carbon impact."];
var num = 0;
var num2 = 0;
var numConsFacts = persFacts.length;
var numBusiFacts = businessFacts.length;
function displayBusiFact() {
  busiFactSpace.textContent = businessFacts[num];
  num++;
  if (num >= numBusiFacts) {
    num = 0;
  }
}
function displayConsFact() {
  consFactSpace.textContent = persFacts[num2];
  num2++;
  if (num2 >= numConsFacts) {
    num2 = 0;
  }
}
