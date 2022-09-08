function getBotResponse(input) {
  //rock paper scissors
  if (input == "rock") {
    return "paper";
  } else if (input == "paper") {
    return "scissors";
  } else if (input == "scissors") {
    return "rock";
  }

  // Simple responses
  if (input == "hello" || input == "hi") {
    return "Hello there!";
  } else if (input == "goodbye" || input == "bye") {
    return "Talk to you later!";
  } else if (input == "i need loan") {
    return "What type of loan would you like to have?";
    if (input == "personal loan") {
      return "";
    } else if (input == "home loan") {
      return "";
    } else if (input == "car loan") {
      return "";
    } else if (input == "business loan") {
      return "";
    } else if (input == "education loan") {
      return "";
    } else if (input == "gold loan") {
      return "";
    } else {
      return "We don't provide this service";
    }
  } else if (input == "bitch") {
    return "Fuck you!";
  } else if (input == "naveen is gae") {
    return "Yeah. It's a known fact! How can I help you?";
  } else {
    return "Try asking something else!";
  }
}
