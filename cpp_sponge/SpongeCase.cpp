#include <iostream>
#include <string>
#include <algorithm>

std::string spongify(std::string input) {
    std::transform(input.begin(), input.end(), input.begin(), ::tolower);
    std::string output = "";
    int charIndex = 0;

    for (auto i = input.begin(); i != input.end(); ++i) {
        char currentChar = *i;
        if (currentChar != ' ') {
            if (charIndex % 2 == 1 && (currentChar >= 'a' && currentChar <= 'z')) {
                output += std::toupper(currentChar);
                charIndex++;
            } else if (charIndex % 2 == 0 && (currentChar >= 'a' && currentChar <= 'z')) {
                output += std::tolower(currentChar);
                charIndex++;
            } else {
                output += currentChar;
            }
        } else {
            output += " ";
            charIndex = 0;
        }
    }

    return output;
}

int main(int argc, char* argv[]) {
    if (argc < 2) {
        std::cerr << "No input text entered. Usage: SpongeCase.cpp \"text to spongify\"" << std::endl;
        return 1;
    }

    std::cout << spongify(argv[1]) << std::endl;

    return 0;
}

