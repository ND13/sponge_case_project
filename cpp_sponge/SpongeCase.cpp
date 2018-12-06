#include <iostream>
#include <string>

std::string spongify(const std::string& input) {
    std::string output = "";
    int charIndex = 0;

    for (auto i = input.begin(); i != input.end(); ++i) {
        char currentChar = *i;
        if (currentChar != ' ') {
            if (charIndex % 2 == 1) {
                output += std::toupper(currentChar);
                charIndex++;
            } else if (charIndex % 2 == 0) {
                output += std::tolower(currentChar);
                charIndex++;
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

