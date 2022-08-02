export const useCounter = () => useState<number>("counter", () => 0);
export const useColor = () => useState<string>("color", () => "pink");
export const useDarkMode = () => useState<boolean>("darkMode", () => true);
